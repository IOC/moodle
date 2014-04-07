YUI(M.yui.loader).use('node', function(Y) {
    Y.all('select[id^=menu]').each(function (node) {
        node.on('change', function () {
            form = this.ancestor('form', true);
            form.submit();
        });
    });
});
