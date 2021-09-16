function vusuario(v,c)
{
 if(v!=' '){
    var e=/(^(\w{3,20})|^)$/;
    if(!e.test(v))
      {
      alert("El usuario debe tener por lo menos tres caracteres");
      c.value='';
      }
    }
}
function vcontra(v1,c1)
{
if(v1!=' ')
  {
  var e1=/(^((\w+|\*|\.|\s){5,20})|^)$/;
   if(!e1.test(v1))
   {
   alert("La contrasenia debe tener por lo menos 5 caracteres");
   c1.value='';
   
   }
 }
}
function vcontra1(v1,c1,v0,c0)
{
if(v1!=' ')
  {
if (v1!=v0)
{alert('Las contrasenias no coinciden'); c1.value='';c0.value='';}

}
 
}
function vnombre(v2,c2)
{
if(v2!=' ')
 {

 var e3=/(^([a-zA-Z]{2,15}){1}(\s{1}[a-zA-Z]{2,15})*|^)$/;  
  if(!e3.test(v2))
  {
   alert(v2+", No es válido como nombre");
   c2.value='';
  }
  else
  {
  c2.value=c2.value.toUpperCase()
  }
  }
 
}
function vtel(v3,c3)
{
 if(v3!=' '&& v3!='____-____')
 {
 var e3=/(^([2|7]{1}[0-9]{3}[-]{1}[0-9]{4})|^)$/;
  if(!e3.test(v3))
  {
   alert("Telefono incorrecto, debe respetar el formato 9999-9999");
   c3.value='';
  }
 }
}
function vemail(v4,c4)
{
 if(v4!=' ')
 {
  var e4=/^(\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+|^)$/; 
  if(!e4.test(v4))
  {
   alert("E-mail incorrecto");
   c4.value='';
  }
  }
}

  function ejecutar(cod,ir) { 
     document.form1.id_input.value =cod;  
     document.form1.method="POST";
     
     switch(ir)
     {     
     case 1: document.form1.action="modificar.php"; break;
     case 2: document.form1.action="eliminar.php";  break;
     }
   document.form1.submit();  
  }
