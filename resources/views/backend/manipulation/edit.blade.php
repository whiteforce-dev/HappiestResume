<script>
    function is_edit(url, page) {
        $.confirm({
            title: 'Confirm',
            content: 'Are you sure to update this '+page+' ??',
            buttons: {
                confirm: function () {
                    window.location.href = url;
                },
                cancel: function () {
//                        $.alert('Canceled!');
                }
            }
        });
    }
    function is_delete(url, page) {
        $.confirm({
            title: 'Confirm',
            content: 'Are you sure to delete this '+page+' ??',
            buttons: {
                confirm: function () {
                    var _method = 'DELETE';
                    var _token = "{{  csrf_token() }}";

                    $.post(url, {
                        _method : _method,
                        _token : _token,
                    }, function(response){
                        if(response)
                        {
                            alert(page+' has been deleted successfully !!');
                            location.reload();
                        }
                    });
                },
                cancel: function () {
                       $.alert('Canceled!');
                }
            }
        });
    }
</script>