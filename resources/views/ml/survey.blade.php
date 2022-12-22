<div class="uk-background-lime uk-container" id="survey">
    <div class="uk-child-width-1-2@m" uk-grid uk-height-viewport>
        <div class="uk-inline uk-background-default">
            <div class="uk-position-center-left  uk-margin-xlarge-left uk-padding" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500">
                <div uk-scrollspy-class="uk-animation-slide-top">
                    <img src="https://cdn.dribbble.com/users/176039/screenshots/3084229/media/885b12dea598a3c91e3ed83948dafb7b.gif" loop=infinite alt="this image sourced from https://dribble.com/">
                    <h2>
                        Terima Kasih.
                    </h2>
                </div>
                <div>
                    <p>
                        Saya ucapkan kepada rekan-rekan yang ikut berpartisipasi dalam pengumpulan data ini.
                    </p>
                </div>
            </div>
        </div>
        <div class="uk-section">
            <h3>Berikan Komentar</h3>
            <form action="" method="post" class='uk-form-horizontal'>
                @csrf
                <div class="uk-margin">
                    <select class="uk-select" name="aspect" id="aspect" required>
                        <option>Pilih Aspek</option>
                        <option value="1">Pelayanan</option>
                        <option value="2">Akademik</option>
                        <option value="3">Fasilitas</option>
                    </select>
                </div>
                <div class="uk-margin">
                    <select class="uk-select" name="rating" id="rating" required>
                        <option>Tingkat Kepuasan</option>
                        <option value="5">Baik Sekali</option>
                        <option value="4">Baik</option>
                        <option value="3">Cukup</option>
                        <option value="2">Buruk</option>
                        <option value="1">Buruk Sekali</option>
                    </select>
                </div>
                <div class="uk-margin">
                    <textarea class="uk-textarea" name="comments" id="comments" rows="15" placeholder="Berikan Komentar" required></textarea>
                </div>
                <div class="uk-margin">
                    <button type="submit" clas="uk-button uk-button-secondary">Submit Komentar</button>
                </div>
            </form>
        </div>
    </div>
</div>