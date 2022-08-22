<!-- Argon Scripts -->
<!-- Core -->
<script src="../assets/assets-admin/js/core/popper.min.js"></script>
<script src="../assets/assets-admin/js/core/bootstrap.min.js"></script>
<script src="../assets/assets-admin/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/assets-admin/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../assets/assets-admin/js/plugins/chartjs.min.js"></script>
<script src="../assets/assets-admin/js/argon-dashboard.min.js?v=2.0.4"></script>
<script>
    tinymce.init({
        selector: '#detail, #def, #editdetail'
    });
</script>
<!-- Tambahan -->
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>
<script type="text/javascript">
    const secondHand = document.querySelector('.jarum_detik');
    const minuteHand = document.querySelector('.jarum_menit');
    const jarum_jam = document.querySelector('.jarum_jam');

    function setDate() {
        const now = new Date();

        const seconds = now.getSeconds();
        const secondsDegrees = ((seconds / 60) * 360) + 90;
        secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
        if (secondsDegrees === 90) {
            secondHand.style.transition = 'none';
        } else if (secondsDegrees >= 91) {
            secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
        }

        const minutes = now.getMinutes();
        const minutesDegrees = ((minutes / 60) * 360) + 90;
        minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

        const hours = now.getHours();
        const hoursDegrees = ((hours / 12) * 360) + 90;
        jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
    }

    setInterval(setDate, 1000)
</script>
