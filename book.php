<?
class ShopProduct
{
	private $title;
	private $producerMainName;
	private $producerFirstName;
	private $price;
	private $discount = 0;

	public function __construct(
		string $title
		string $firstName
		string $mainName
		float $price
){
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price
}
	public function getProducerName()
{
		return $this->producerFirstName
}
}
?>
		