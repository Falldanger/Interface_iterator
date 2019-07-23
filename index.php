<?php
	echo '<b>Iterators :</b>'.'</br>';

	class MyClass implements Iterator{
		public $index=5;

		private $list=['Dima','Vlad','Den','Greg','Alex'];

		public function getList(){
			return $this->list;
		}

		public function rewind(){
			$this->index=0;
		}
		public function current(){
			return $this->list[$this->index];
		}
		public function key(){
			return $this->index;
		}
		public function next(){
			$this->index++;
		}
		public function valid(){
			$index=key($this->list);
			return ($index !==null && $index !==false);
		}
	}


	$list=new MyClass();
	foreach ($list->getList() as $k => $v) {
		echo "$k = $v;";
	}
	echo '</br>';

?>