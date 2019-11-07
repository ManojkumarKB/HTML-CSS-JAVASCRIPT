<html>
<body>
<?php
$id=(int)$_POST['IdlyQty'];
$vd=(int)$_POST['VdQty'];
$dh=(int)$_POST['DhQty'];
$pr=(int)$_POST['PrQty'];
$total=0;
$id_rt=5;
$vd_rt=3;
$pr_rt=15;
$dh_rt=10;
echo '<html><center><h1>OSS MESS </h1><H3>Bill Amount</h3><h4>Name:'.$_POST['Nm'].'</center></html>';
if($id!=0)
{
    $total= $total+idlyCnt($id);
}
if(($pr!=0))
{
   $total=$total+PrCnt($pr);
}
if(($vd!=0))
{
    $total=$total+VdCnt($vd);
}
if($dh!=0)
{
    $total=$total+DhCnt($dh);
}
echo '<html><center><h2>Total:'.$total.'</h2></center></html>';;
function idlyCnt($qty)
{
    $t= ($qty*$GLOBALS['id_rt']);
    echo '<html><center><table><tr><td>Idly</td><td>'.$qty.'</td><td>'.$t.'</td></table></center></html>';
    return (int)$t;
}
function PrCnt($qty)
{
    $G=($qty*$GLOBALS['pr_rt']);
    echo '<html><center><table><tr><td>Poori</td><td>'.$qty.'</td><td>'.$G.'</td></table></center></html>';
    return (int)$G;
}
function DhCnt($qty)
{
    $to=($qty*$GLOBALS['dh_rt']);
    echo '<html><center><table><tr><td>Dhosai</td><td>'.$qty.'</td><td>'.$to.'</td></table></center></html>';
    return (int)$to;
}
function VdCnt($qty)
{
    $tot=($qty*$GLOBALS['vd_rt']);
    echo '<html><center><table><tr><td>Vadai</td><td>'.$qty.'</td><td>'.$tot.'</td></table></center></html>';
    return (int)$tot;
}
?>
<br><br>
<a href="main.html">Go to Main Page</a>
</body></html>

