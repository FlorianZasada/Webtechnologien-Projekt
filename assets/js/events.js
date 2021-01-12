$(() => {
    $('[data-toggle="tooltip"]').tooltip();

    const hideByRules = () => {
        const searchQuery = $('#search-bar').val();
        const searchDateFrom = new Date($('#search-date-from').val());
        const searchDateTo = new Date($('#search-date-to').val());

        $('.event-card').each((_, el) => {
            $(el).show();
            const cardDate = new Date($(el).find('.card-date').data('date'));

            if($(el).find('.card-title').html().toLowerCase().indexOf(searchQuery.toLowerCase()) === -1 || 
            (cardDate < searchDateFrom || cardDate > searchDateTo)) $(el).hide();
        });
    };

    const routes = window.location.pathname.split('/');
    if(routes[routes.length - 1] === "validation")
        $('#createEvent').modal('show');

    $('#image-upload').on('change', function() {
        var fileName = $(this).val();
        fileName = fileName.replace(/^.*[\\\/]/, '');

        $(this).next('.custom-file-label').html(fileName);
    });

    $('#clear-button').on('click', () => {
        $('.date-picker').val('');
        $('.date-picker').trigger('change');
    });

    $('#search-bar').on('input', hideByRules);

    $('.date-picker').on('change', hideByRules);

    $('.delete-button').on('click', function() {
        const id = $(this).closest('.card').data('id');
        let img = $(this).closest('.card-body').siblings('img').attr('src').split('/');
        img = img[img.length - 1];
        $.post('events/deleteCard', { id, img }, () => window.location.reload());
    });
});