<?php

	/**
	*  This module will be used to frmat the data published 
	*/
	class ClassName
	{
		
		/* Format date function */
		static public  function formatDate($date)
		{
			return date ('F j, Y',strtotime(date));
		}

		/*Format email ( mailto function) */
		
		static public  function mailto()
		{
			# code...
		}

		/*Format status (active or inactive) */
		
		static public  function status($date)
		{
			if (status==1)
			{
				//return (<span class="label label-primary"> Active </span>);
			}
			else
			{
				//return (<span class="label label-danger"> Inactive </span>);
			}
		}



	}

?>