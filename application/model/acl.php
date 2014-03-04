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
		
// por aqui viene despues del constructor model_mappers_db
// ve primero a ver que ocurre alli
die;
	
		$result=mysqli_query($this->link, $sql);
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