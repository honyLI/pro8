<html>
<head>
<title>linktlist</title>
</head>
<body>
<?php
class Node
{
	public $data='';
	public $next=null;
	public function __construct($data,$next)
	{	
		$this->data=$data;
		$this->next=$next;
	}
}



$head=new Node("Miss Wu",null);

function add($adata,$head)
{
	$a=new Node($adata,null);
	$a->next = $head->next;
	$head->next = $a;
}

function display($head)
{
	$p=$head;
	while($p!=null)
	{
		echo "Data: ".$p->data."<br/>";
		$p=$p->next;
	}
}

function del($data,$head)
{
	$p= $head;
	$pre=null;

	while($p)
	{
		if(strcmp($p->data,$data)==0)	
		{
			$pre->next=$p->next;
		}
		$pre=$p;
		$p=$p->next;
	}
}


add("Lily",$head);
add("Bill",$head);
add("YaYa",$head);
add("BinBin",$head);

display($head);
echo "<hr/>";
del("YaYa",$head);
display($head);

?>
</body>
</html>