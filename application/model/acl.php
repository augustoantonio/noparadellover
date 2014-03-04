<?php


class model_acl extends model_mappers_db
{
	public function getAcl($id, $request)
	{
		$sql="SELECT acl.*
			  FROM acl
			  WHERE acl.users_iduser = '".$id."' AND
			  		acl.controller = '".$request['controller']."' AND
			  		acl.action = '".$request['action']."'";


// echo $sql;
// echo '<pre>';
// print_r($_SESSION['register']);
// echo '</pre>';
// echo $request['permissions'];
// die;
// $result=mysqli_query($this->link, $sql);

		if ($request['permissions']== '1')
		{
echo 'dentro del 0'.$request['permissions'];
die;
			$result=mysqli_query($_SESSION['register']['linkW'], $sql);
		}
		else
		{
			echo 'dentro del '.$request['permissions'];
die;
			$result=mysqli_query($_SESSION['register']['linkR'], $sql);
		}

// echo 'aqui';
// echo '<pre>';
// if (!$result)
	// echo 'shit';
// die;
// echo '</pre>';
// echo 'despues';
// die;
		while ($row=mysqli_fetch_assoc($result))
		{
			$rows[]=$row;

		}
		if(isset($rows))
			return $rows[0];
		else
			return null;
	}
}