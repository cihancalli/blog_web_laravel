<div id="youtubeModal" class="modal border rounded">
    <div class="modal-content">
        <span class="close" id="closeYoutubeModal">&times;</span>
        <iframe id="youtubeIframe" width="640" height="360" type="text/html" src="https://www.youtube.com/embed/FtAR3wzqlqg?autoplay=1"  frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var youtubeModal = document.getElementById('youtubeModal');
        var openYoutubeModalBtn = document.getElementById('openYoutubeModal');
        var closeYoutubeModalBtn = document.getElementById('closeYoutubeModal');
        var youtubeIframe = document.getElementById('youtubeIframe');

        youtubeModal.style.display = 'block';

        closeYoutubeModalBtn.addEventListener('click', function() {
            youtubeModal.style.display = 'none';
            youtubeIframe.src = '';
        });

        document.addEventListener("visibilitychange", function() {
            if (document.hidden) {
                //youtubeIframe.contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
            }
        });
    });
</script>
