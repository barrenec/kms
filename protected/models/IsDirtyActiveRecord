<?php


/**
 * IsDirtyActiveRecord adds the isWritten property to {@link CActiveRecord}.
 * When the model's attributes have not changed, then no actual save to the database happens: isWritten will be false, even though save() returned true. 
 */
class IsDirtyActiveRecord extends CActiveRecord {
 
    private $_isWritten = false;
    private $_originalHash;
 
    /**
     * detectDirty enables or disables the calculation of a hash of the attributes after every find operation.
     * @var boolean
     */
    public $detectDirty = true;
 
    /**
     * Some attributes may have changed but that change does not indicate that the record is dirty.  E.g. audit attributes may have
     * been set to a new value: the lastupdatetime for example.  These attributes should be ignored when determining whether or not
     * the model is dirty.
     * @var array
     */
    public $neverMakeDirtyAttributes = array();
 
    /**
     * Should afterSave() events be called if a model was saved but not actually written to the database because it was not dirty ?
     * @var boolean
     */
    public $doAfterSaveIfNotDirty = false;
 
    /**
     * isWritten returns true if the save() did really write something to the database.
     * If the model was not dirty, then save() returns true, but isWritten is false.
     * Note that you should evaluate the result of save() to know whether the validation was
     * succesful, only then should you evaluate isWritten.
     * I.e.
     * if ($model->save())
     *      if ($model->isWritten) {
     *          //really updated the record in the database
     *          ...
     *      }
     *      else {
     *          //validation was ok, but the record was not written because not dirty
     *          ...
     *      }
     * }
     *      
     * @return boolean
     */
    public function getIsWritten() {
        return $this->_isWritten;
    }
 
    /**
     * Calculate the hash and only then launch afterFind() events, because these could modify the attributes.
     * Note that any overrides of this function should first call parent::afterFind() and then implement their own code.
     */
    protected function afterFind() {
        if ($this->detectDirty) {
            $this->_originalHash = $this->calculateHash();
        }
        parent::afterFind();
    }
 
    /**
     * Initialize isWritten to true.  It will be set to false when the save did not happen because the model was not dirty.
     * @return boolean
     */
    protected function beforeSave() {
        $this->_isWritten = true;
        return parent::beforeSave();
    }
 
    /**
     * This is a verbatim copy of the Yii 1.1.14 version of update() with modifications to stop the save in
     * case the model is not dirty. (and it uses the parent's class methods to track primary key modifications
     * instead of directly writing to private variables which are inaccessible here)
     * The update() needs to be overridden here because it raises the beforeSave() events and then saves.  But
     * we need to calculate the hash after beforeSave(), but before anything is written to the database.
     * @param array $attributes list of attributes that need to be saved. Defaults to null,
     * meaning all attributes that are loaded from DB will be saved.
     * @return boolean whether the update is successful or the model was not dirty.
     * @throws CDbException if the record is new
     */
    public function update($attributes=null)
    {
        if($this->getIsNewRecord())
            throw new CDbException(Yii::t('yii','The active record cannot be updated because it is new.'));
        if($this->beforeSave())
        {
            if ($this->detectDirty && $this->_originalHash == $this->calculateHash(true)) {
                $this->_isWritten = false;
                if ($this->doAfterSaveIfNotDirty)
                    $this->afterSave();
                return true;
            }
 
            Yii::trace(get_class($this).'.update()','system.db.ar.CActiveRecord');
 
            if($this->getOldPrimaryKey()===null)
                $this->setOldPrimaryKey($this->getPrimaryKey());
            $this->updateByPk($this->getOldPrimaryKey(),$this->getAttributes($attributes));
            $this->setOldPrimaryKey($this->getPrimaryKey());
            $this->afterSave();
            return true;
        }
        else
            return false;
    }
 
    /**
     * Calculate a hash from the model's attributes.
     * It excludes attributes in neverMakeDirtyAttributes.
     * If $castEmpty=true it will typecast empty string values to null if the matching database field is not a string.
     * That is what the Yii framework does when saving, so we need to mimic this here to be able to compare attributes after load and before save.
     * See {@see CActiveRecord::createUpdateCommand}.
     * @param boolean $castEmpty
     * @return string
     */
    private function calculateHash($castEmpty = false) {
        $a = array_diff_key($this->getAttributes(false), array_flip($this->neverMakeDirtyAttributes));
        if ($castEmpty) {
            $a = $this->typeCastEmpty($a);
        }
        return md5(serialize($a));
    }
 
    /**
     * Any empty attributes (value==='') for non-string database fields are translated into null.
     * @param array $a
     * @return array
     */
    private function typeCastEmpty($a) {
        $table=null;
        foreach($a as $k=>$v) {
            if ($v==='') {
                if ($table===null)
                    $table=$this->getTableSchema();
                $column = $table->getColumn($k);
                if($column->allowNull && $column->type!=='string')
                    $a[$k]=null;
            }
        }
        return $a;
    }
}