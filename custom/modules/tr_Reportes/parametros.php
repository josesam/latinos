<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include('custom/include/Reportes/sp_globals.php');
}

$reportes=$_REQUEST['reportes'];
if(isset($reportes)){
 switch ($reportes){
       case 1:
            if (file_exists(SP_PATHREPORTES.'ReporteApplicationSent/ReporteApplicationSent.php')){
                include(SP_PATHREPORTES.'ReporteApplicationSent/ReporteApplicationSent.php');
            }
            if(class_exists("ReporteApplicationSent")){
                $form=$_REQUEST;
                $manejador=new ReporteApplicationSent($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                        if(isset($verreporte)){
                          $manejador->mostrarData();
                             $manejador->display();

                        }else if (isset($exportarExcel)){
                            $manejador->exportexcel();
                        }else{
                            $manejador->displayParametros();

                        }

            }



           break;
       case 2:
            if (file_exists(SP_PATHREPORTES.'ReporteStudentWithoutApplications/ReporteStudentWithoutApplications.php')){
                include(SP_PATHREPORTES.'ReporteStudentWithoutApplications/ReporteStudentWithoutApplications.php');
            }
            if(class_exists("ReporteStudentWithoutApplications")){
                $form=$_REQUEST;
                $manejador=new ReporteStudentWithoutApplications($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                        if(isset($verreporte)){
                          $manejador->mostrarData();
                             $manejador->display();

                        }else if (isset($exportarExcel)){
                            $manejador->exportexcel();
                        }else{
                            $manejador->displayParametros();

                        }

            }

           break;

       /*-------------------------------------------------------------------------------------------------*/
       case 3:
            if (file_exists(SP_PATHREPORTES.'ReporteStudentWithApplications/ReporteStudentWithApplications.php')){
                include(SP_PATHREPORTES.'ReporteStudentWithApplications/ReporteStudentWithApplications.php');
            }
            if(class_exists("ReporteStudentWithApplications")){
                $form=$_REQUEST;
                $manejador=new ReporteStudentWithApplications($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                        if(isset($verreporte)){
                          $manejador->mostrarData();
                             $manejador->display();

                        }else if (isset($exportarExcel)){
                            $manejador->exportexcel();
                        }else{
                            $manejador->displayParametros();

                        }

            }



           break;

           /*-------------------------------------------------------------------------------------------------*/
       case 4:
            if (file_exists(SP_PATHREPORTES.'ReporteMedicionTiempos/ReporteMedicionTiempos.php')){
                include(SP_PATHREPORTES.'ReporteMedicionTiempos/ReporteMedicionTiempos.php');
            }
            if(class_exists("ReporteMedicionTiempos")){
                $form=$_REQUEST;
                $manejador=new ReporteMedicionTiempos($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                        if(isset($verreporte)){
                          $manejador->mostrarData();
                             $manejador->display();

                        }else if (isset($exportarExcel)){
                            $manejador->exportexcel();
                        }else{
                            $manejador->displayParametros();

                        }

            }



           break;

           /*-------------------------------------------------------------------------------------------------*/
       case 5:
            if (file_exists(SP_PATHREPORTES.'ReporteVentaProyecto/ReporteVentaProyecto.php')){
                include(SP_PATHREPORTES.'ReporteVentaProyecto/ReporteVentaProyecto.php');
            }
            if(class_exists("ReporteVentaProyecto")){
                $form=$_REQUEST;
                $manejador=new ReporteVentaProyecto($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                        if(isset($verreporte)){
                          $manejador->mostrarData();
                             $manejador->display();

                        }else if (isset($exportarExcel)){
                            $manejador->exportexcel();
                        }else{
                            $manejador->displayParametros();

                        }

            }



           break;


           /*-------------------------------------------------------------------------------------------------*/
      case 6:
            if (file_exists(SP_PATHREPORTES.'ReportesActividadGestion/ReportesActividadGestion.php')){
                include(SP_PATHREPORTES.'ReportesActividadGestion/ReportesActividadGestion.php');
            }
            if(class_exists("ReportesActividadGestion")){
                $form=$_REQUEST;
                $manejador=new ReportesActividadGestion($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                        if(isset($verreporte)){
                          $manejador->mostrarData();
                             $manejador->display();

                        }else if (isset($exportarExcel)){
                            $manejador->exportexcel();
                        }else{
                            $manejador->displayParametros();

                        }

            }
            



           break;


           /*-------------------------------------------------------------------------------------------------*/
       case 7:
            if (file_exists(SP_PATHREPORTES.'ReporteInventario/ReporteInventario.php')){
                include(SP_PATHREPORTES.'ReporteInventario/ReporteInventario.php');
            }
            if(class_exists("ReporteInventario")){
                $form=$_REQUEST;
                $manejador=new ReporteInventario($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                        if(isset($verreporte)){
                          $manejador->mostrarData();
                             $manejador->display();

                        }else if (isset($exportarExcel)){
                            $manejador->exportexcel();
                        }else{
                            $manejador->displayParametros();

                        }

            }



           break;


           /*-------------------------------------------------------------------------------------------------*/
           case 8:
            if (file_exists(SP_PATHREPORTES.'ReporteClientesAsignados/ReporteClientesAsignados.php')){
                include(SP_PATHREPORTES.'ReporteClientesAsignados/ReporteClientesAsignados.php');
            }
            if(class_exists("ReporteClientesAsignados")){
                $form=$_REQUEST;
                $manejador=new ReporteClientesAsignados($_REQUEST);
                $verreporte=$_REQUEST['verreporte'];
                $exportarExcel=$_REQUEST['descargar'];
                        if(isset($verreporte)){
                          $manejador->mostrarData();
                             $manejador->display();

                        }else if (isset($exportarExcel)){
                            $manejador->exportexcel();
                        }else{
                            $manejador->displayParametros();

                        }

            }



           break;

           /*-------------------------------------------------------------------------------------------------*/
       







   }

}
?>
