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

    const cardData = that => {
        const card = $(that).parents('.card');
        const id = $(card).data('id').toString();
        const title = $(card).find('.card-title').text();
        const description = $(card).find('.card-description').text();
        let img = $(card).find('.card-body').siblings('img').attr('src').split('/');
        img = img[img.length - 1];

        return { id, title, description, img };
    }

    const routes = window.location.pathname.split('/');
    $(`#${routes[routes.length - 1]}`).modal('show');

    $('.image-upload').on('change', function() {
        $('#editCard input[name="file-flag"]').val("1");
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
        const { id, img } = cardData(this);
        $.post('news/deleteCard', { id, img }, () => window.location.reload());
    });

    $('.edit-button').on('click', function() {
        const { id, title, description, img } = cardData(this);
        $('#editCard input[type="text"]').val(title);
        $('#editCard textarea').html(description);
        $('#editCard input[type="file"]').next('.custom-file-label').html(img);
        $('#editCard input[name="card-id"]').val(id);
        $('#editCard input[name="file-flag"]').val("0");
        $('#editCard input[name="old-image"]').val(img);
    });
});