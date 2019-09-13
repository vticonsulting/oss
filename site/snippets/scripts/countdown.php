<script src="./includes/js/countdown.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
  if (jQuery.isFunction(jQuery.fn.countDown)) {
    $('#qcEventCountDown').countDown({
      targetDate: {
        'day': <?= $site->event_date()->toDate('%d') ?>,
        'month': <?= $site->event_date()->toDate('%m') ?>,
        'year': <?= $site->event_date()->toDate('%Y') ?>,
        'hour': 0,
        'min': 0,
        'sec': 0
      },
      omitWeeks: true
    });
  }
});
</script>