//jQuery name space
(function ($) {
    //document ready
    $(function () {
        $(".dropdown-button").dropdown({
            hover: true,
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            // gutter: -130, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left'
        });
    }); // end of document ready
})
$(document).ready(function () {
    $('select').material_select();
});
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
$('.rolesModalTrigger').click(function(){
    modal = $('#rolesModal');
    contenido = $(this).closest('div').find('.contenido-card');
    alert(id = contenido.children().eq(0).text());
    $('#rolesModalId').val(id);
    user = contenido.children().eq(2).text().replace('Nombre de usuario: ', '');
    $('#rolesModalUser').text(user);
    roles = contenido.children().eq(6).text().replace('Roles: ', '').split(", ");
    for (var i = 0; i < roles.length; i++) {
        var rol = '#' + roles[i];
        $(rol).prop('checked', true);
    }
});
(jQuery); // end of jQuery name space