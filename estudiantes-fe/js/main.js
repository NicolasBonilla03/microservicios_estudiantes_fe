// function Btnregistro() {
//     var nom = document.getElementById('name');
//     var usu = document.getElementById('username');
//     var pwd = document.getElementById('password');
//     registrar(nom.value, usu.value, pwd.value)
//     location.reload();
// };


// function btnBorrar(id){       
// $.ajax({
//          url:'http://localhost:8000/usuarios/'+id,
//          method: 'delete',
//      }).done(response=>{
//          const dataJson = JSON.parse(response);
//          const msg = dataJson.data;
//          alert(response);
//          location.reload();
//      });
// }
// function btnModificar(id) {
//     var id = usuario.id;
// 	$('#name').value;
//     var nom = document.getElementById('name');
//     var usu = document.getElementById('username');
//     var pwd = document.getElementById('password');
//     Modificar(id.value, nom.value, usu.value, pwd.value)
// };

// function Modificar(idd, nombre, usuario, contra){
//     $.ajax({
//          url:'http://localhost:8000/usuarios/'+idd,
//          method: 'put',
//          data:{
//                 id: idd, 
//                  name: nombre,
//                  username: usuario,
//                  password: contra
//          }
//      }).done(response=>{
//          const dataJson = JSON.parse(response);
//          const msg = dataJson.data;
//          alert(msg);
//      });
// }


$(document).ready(function(){
    $.ajax({
        method: 'get',
        url: 'http://localhost:8000/index'
    }).done(estudiantes => {
    	console.log(estudiantes);
        const table = $('#estudiantes');
        let html = '';
        estudiantes.forEach( estudiante =>{
            html +='<tr>';
            html +='    <td>'+ estudiante.codigo +'</td>';
            html +='    <td>'+ estudiante.nombres+ '</td>';
            html +='    <td>'+ estudiante.apellidos+ '</td>';
            html +='    <td>';
            html +='       <button type="button" onclick="btnBorrar('+estudiante.codigo+');">Eliminar</button>';
            html +='       <button type="button" onclick="obtenerNotas(' + estudiante.codigo + ');">Modificar</button>';
            html +='       <button type="button" onclick="obtenerNotas(' + estudiante.codigo + ');">Notas</button>';
            html +='   </td>';
            html +='</tr>';
        });
        table.append(html);
    }).fail((error)=>{
        console.error(error);
    });   
});

function obtenerNotas(codigoEstudiante) {
	console.log(codigoEstudiante);
    $.ajax({
        url:'http://localhost:8000/actividades/' + codigoEstudiante,
        method: 'get',
    }).done(notas => {
    	console.log(notas);
        const notesTable = $('#notas');
        let promedio = 0;
        let html = '';
        notesTable.html(html);
        notas.forEach(nota => {
            html +='<tr>';
            html +='    <td>'+ nota.id +'</td>';
            html +='    <td>'+ nota.codigoEstudiante+ '</td>';
            html +='    <td>'+ nota.descripcion+ '</td>';
            html +='    <td>'+ nota.nota+ '</td>';
            html +='    <td>';
            html +='       <button onclick="btnModificar(' + nota.id + ');">Modificar</button>';
            html +='       <button onclick="btnBorrar(' + nota.id + ');">Eliminar</button>';
            html +='   </td>';
            html +='</tr>';
            promedio += +nota.nota;
        });
        const clase = promedio > 3 ? 'aprobado' : 'reprobado';
		html +='<tr>';
        html +='    <td>Promedio</td>';
        html +='    <td>'+ promedio/notas.length +'</td>';
        html +='    <td class="nota ' + clase + '">'+ clase  +'</td>';
        html +='</tr>';
        notesTable.append(html);
    }).fail(error => {
        console.error(error);		
    }); 
}