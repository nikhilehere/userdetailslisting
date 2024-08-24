$(document).ready(function() {
    $('#search').on('keyup', function() {
        let value = $(this).val().toLowerCase();
        $('#user-list .tile').each(function() {
            let text = $(this).text().toLowerCase();
            $(this).toggle(text.includes(value));
        });
    });
});