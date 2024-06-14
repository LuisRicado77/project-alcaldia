<?php
namespace ActiveRecord;

class DateTime extends \DateTime
{
	private $model;
	private $attribute_name;

	public function attribute_of($model, $attribute_name)
	{
		$this->model = $model;
		$this->attribute_name = $attribute_name;
	}

	private function flag_dirty()
	{
		if ($this->model)
			$this->model->flag_dirty($this->attribute_name);
	}

	public function setDate(int $year, int $month, int $day): \DateTime
	{
		$this->flag_dirty();
		return call_user_func_array(array($this,'parent::setDate'), func_get_args());
	}

	public function setISODate(int $year, int $week , int $day = 1): \DateTime
	{
		$this->flag_dirty();
		return call_user_func_array(array($this,'parent::setISODate'), func_get_args());
	}

	public function setTime(int $hour, int $minute, int $second = 0, int $microseconds = 0): \DateTime
	{
		$this->flag_dirty();
		return call_user_func_array(array($this,'parent::setTime'), func_get_args());
	}

	public function setTimestamp(int $unixtimestamp): \DateTime
	{
		$this->flag_dirty();
		return call_user_func_array(array($this,'parent::setTimestamp'), func_get_args());
	}
}
?>
