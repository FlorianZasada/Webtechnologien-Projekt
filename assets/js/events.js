$(() => {
    $('[data-toggle="tooltip"]').tooltip();

    const routes = window.location.pathname.split('/');
    if(routes[routes.length - 1] === "validation")
        $('#createEvent').modal('show');

    $('#image-upload').on('change', () => {

        var fileName = $(this).val();
        fileName = fileName.replace(/^.*[\\\/]/, '');

        $(this).next('.custom-file-label').html(fileName);
    });

    $('#search-button').on('click', () => {
        const searchQuery = $('#search-bar').val();
        const searchDateFrom = new Date($('#search-date-from').val());
        const searchDateTo = new Date($('#search-date-to').val());

        if(searchQuery.length > 0 && isNaN(searchDateFrom) && isNaN(searchDateTo)) {}

        $('.event-card').each((_, el) => {
            $(el).show();
            const cardDate = new Date($(el).find('.card-date').data('date'));
            console.log($(el).find('.card-title').html().toLowerCase().indexOf(searchQuery.toLowerCase()) !== -1, (searchDateFrom <= cardDate && cardDate <= searchDateTo), (isNaN(searchDateTo) && searchDateFrom < cardDate), (isNaN(searchDateFrom) && cardDate < searchDateTo))
            //HELP
        });
    });

    $('#clear-button').on('click', () => $('.date-picker').val(""));
});