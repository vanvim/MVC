<?php
namespace MVC\Models;

use MVC\Core\Model;

class TaskModel extends Model
{
	protected $sbd;
	protected $hoten;
	protected $diachi;
	protected $uutien;
	protected $makhoi;

	public function __construct()
	{
		$this->sbd="";
		$this->hoten="";
		$this->diachi="";
		$this->uutien="";
		$this->makhoi="";

	}

	public function setSbd($sbd)
	{
		$this->sbd=$sbd;
	}

	public function getSbd()
	{
		return $this->sbd;
	}

	public function setHoten($hoten)
	{
		$this->hoten=$hoten;
	}

	public function getHoten()
	{
		return $this->hoten;
	}

	public function setDiachi($diachi)
	{
		$this->diachi=$diachi;
	}

	public function getDiachi()
	{
		return $this->diachi;
	}

	public function setUutien($uutien)
	{
		$this->uutien=$uutien;
	}

	public function getUutien()
	{
		return $this->uutien;
	}

	public function setMakhoi($makhoi)
	{
		$this->makhoi=$makhoi;
	}

	public function getMakhoi()
	{
		return $this->makhoi;
	}
}