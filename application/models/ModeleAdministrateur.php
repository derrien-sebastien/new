<?php

class ModeleAdministrateur extends CI_Model 

{


    /**********************************************************************
    **                           Constructeur                              **
    **********************************************************************/


	public function __construct()
	{
	    $this->load->database();
    }


/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/
/**************************                                                                              *************************************/
/**************************                  SELECT () DE NOTRE TABLE GE_ADMINISTRATEUR                  *************************************/
/**************************                                                                              *************************************/
/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/


    public function retournerPersonne($Personne)
    {
        $requete = $this->db->get_where('ge_administrateur',$Personne);
        return $requete->row();
    }


/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/
/**************************                                                                              *************************************/
/**************************                INSERT () DE NOTRE TABLE GE_ADMINISTRATEUR                    *************************************/
/**************************                                                                              *************************************/
/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/


/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/
/**************************                                                                              *************************************/
/**************************                UPDATE () DE NOTRE TABLE GE_ADMINISTRATEUR                    *************************************/
/**************************                                                                              *************************************/
/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/
/*********************************************************************************************************************************************/

    
}