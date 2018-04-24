<pre>
<?php
	class Car{
		public $color = '';
		public $toplivo = '';
		public $doors = '';
		public function __construct( $color, $toplivo, $doors){
			$this->color = $color;
			$this->toplivo = $toplivo;
			$this->doors = $doors;	
		}
		public function go () {
		}
		public function stop () {
		}
			
	}
	
	$car1 = new Car ('Красный', 'Дизель', '4 двери');
	$car2= new Car( 'Синий', 'Бензин', '2 двери');
	print_r ($car1);
	print_r ($car2);
	
	
	
	
	

	class TV{
		private $Chanal = 1;
		private $OnOff = false;
		public $diagonal = '';
		public function __construct ($diagonal){
			$this->diagonal = $diagonal;	
		}	
		public function ChangeChanel() {
		}
		public function OnOff (){
			$this->OnOff = !$this->OnOff;	
		}
	}
	$TV1 = new TV('24');
	$TV1->OnOff();
	$TV2 = new TV('32');
	print_r ($TV1);
	print_r ($TV2);
	
	
	
	
	class Pen {
		public $color = '';
		public $price = '';
		public $dlina = '';
		public function __construct( $color, $price, $dlina){
			$this->color = $color;
			$this->price = $price;
			$this->dlina = $dlina;
		}
		public function pishet (){
		}
	}
	
	$pen1 = new Pen ('синяя', '12р', '12см');
	$pen2 = new Pen ('красная', '14р', '16см');
	print_r ($pen1);
	print_r ($pen2);
	
	
	
	class Duck {
		public $tsvet = '';
		public $vozrast = 0;
		public $poroda = '';
		public function	__construct ($tsvet, $vozrast, $poroda){
			$this->tsvet = $tsvet;
			$this->vozrast = $vozrast;
			$this->poroda = $poroda;
		}
		public function fly(){
		}
	}
		$duck1 = new Duck ('пестрая', 6, 'дикая');
		$duck2 = new Duck ('белая', 8, 'домашняя');
		print_r ($duck1);
		print_r ($duck2);
		
	class Produkt {
		public $name = '';
		public $ostatok = 0;
		public $price = 0;
		public $discout = 0;
		public function __construct ( $name, $ostatok, $price, $discout){
			$this->name = $name;	
			$this->ostatok = $ostatok;
			$this->price = $price;
			$this->discout = $discout;
		}
		public function bonus(){
			if($this->discout >=0){
				return round($this->price*(1-$this->discout/100));
			}
		}
	}
		$book = new Produkt ('Книга', 3000, 200, 3);
		$lego = new Produkt ('Лего', '60', 1500, 15);
		print_r ($book);
		print_r ($lego);
		echo '<br>Цена со скидкой:'.$book->bonus().'<br>';
		echo '<br>Цена со скидкой:'.$lego->bonus().'<br>';


