<?php 

namespace Core;

use Core\Collection;
use Core\Item;

abstract class Stockage
{
	protected $capacite;
	protected $items;
	
	public function getCapacite()
	{
		return $this->capacite;
	}
	
	public function setCapacite($capacite)
	{
		$this->capacite = $capacite;
	}
	
	public function setItems(Collection $items)
	{
		$this->items = $items;
	}
	
	public function addItem(Item $item)
	{
		$this->items->add($item);
	}
	
	public function removeItem($key)
	{
		$this->items->remove($key);
	}
	
	public function sort()
	{
		$this->items->sort();
	}
}