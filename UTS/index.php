<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daneetify</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>⋆˚࿔ daneetify 𝜗𝜚˚⋆</h1>
            <h1>────୨ৎ────</h1>
            <input type="text" placeholder="search for songs, artists">
        </header>

        <h2>welcome, daneeszh!</h2>

        <div class="flexbox">
            <div class="now-playing">
                <h2>✦ʚ now playing ɞ✦</h2>
                <div class="now-playing-content">
                    <img src="uploads/killbill.jpg" alt="Gambar Lagu" class="album-cover">
                    <div class="song-info">
                        <h3>Kill Bill</h3>
                        <h4>SZA</h4>
                        <h5>02.45</h5>
                    </div>
                    <div class="player-controls2">

                        <button class="previous-btn">↻</button>
                        <button class="play-btn" onclick="changeButtonText(this)">||</button>
                        <button class="next-btn">↺</button>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <h2>✦ʚ top tracks ɞ✦</h2>
        <div class="song-list">
            <?php
            $songs = [
                ['title' => 'OMG', 'artist' => 'New Jeans', 'image' => 'uploads/omg.jpg'],
                ['title' => 'Bad', 'artist' => 'Wave To Earth', 'image' => 'uploads/bad.jpg'],
                ['title' => 'Bad Guy', 'artist' => 'Billie Eilish', 'image' => 'uploads/badguy.jpg'],
                ['title' => 'Bonfire', 'artist' => 'Wave To Earth', 'image' => 'uploads/bonfire.jpg'],
                ['title' => 'Drama', 'artist' => 'AESPA', 'image' => 'uploads/drama.jpg'],
                ['title' => 'Saturn', 'artist' => 'SZA', 'image' => 'uploads/saturn.jpg'],
                ['title' => 'Unforgiven', 'artist' => 'LE SSERAFIM', 'image' => 'uploads/unforgiven.jpg'],
                ['title' => 'Copycat', 'artist' => 'Billie Eilish', 'image' => 'uploads/copycat.jpg'],
            ];

            foreach ($songs as $song): ?>
                <div class="song-item" onclick="playSong('<?php echo htmlspecialchars($song['title']); ?>')">
                    <img src="<?php echo htmlspecialchars($song['image']); ?>" alt="<?php echo htmlspecialchars($song['title']); ?>">
                    <h3><?php echo htmlspecialchars($song['title']); ?></h3>
                    <p><?php echo htmlspecialchars($song['artist']); ?></p>
                </div>
            <?php endforeach; ?>
            

            <div class="playlist-container">
                <h2>✦ʚ playlist ɞ✦</h2>
                <div class="playlist-list">
                    <?php
                    $playlists = [
                        ['title' => 'ffummy', 'image' => 'uploads/meong.jpg'],
                        ['title' => 'driving on 82', 'image' => 'uploads/pl2.jpg'],
                        ['title' => 'fairytopia', 'image' => 'uploads/pl3.jpg'],
                        ['title' => 'burn that book', 'image' => 'uploads/dor.jpg'],
                        ['title' => 'flying with me', 'image' => 'uploads/pl1.jpg'],
                        ['title' => 'late night', 'image' => 'uploads/drive.jpg'],
                        ['title' => 'over 911', 'image' => 'uploads/dark.jpg'],

                    ];
                    foreach ($playlists as $playlist): ?>
                        <div class="playlist-item"
                            onclick="playPlaylist('<?php echo htmlspecialchars($playlist['title']); ?>')">
                            <img src="<?php echo htmlspecialchars($playlist['image']); ?>"
                                alt="<?php echo htmlspecialchars($playlist['title']); ?>">
                            <h3><?php echo htmlspecialchars($playlist['title']); ?></h3>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="premium-info">
                <h2>✦ʚ premium ɞ✦</h2>
                <p>🎧ྀི💿</p>
                <h3>listen to danetify without limits!</h3>
                <ul>
                    <p>⌂ ad-free music listening</p>
                    <p>⌂ download to listen offline</p>
                    <p>⌂ high audio quality</p>
                    <p>bca : 44567389</p>
                </ul>
                <button id="openModal">get premium</button>
            </div>

            <div id="purchaseModal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h4>Premium Package Purchase Form</h4>
                    <form action="premium.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="payment">payment method:</label>
                            <select id="payment" name="payment" required>
                                <option value="e-wallet">e-wallet</option>
                                <option value="bank_transfer">bank transfer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="payment_proof">payment proof:</label>
                            <input type="file" id="payment_proof" name="payment_proof" accept="image/*" required>
                        </div>
                        <button type="submit">confirm</button>
                    </form>
                </div>
            </div>

            <div class="genres">
                <h2>✦ʚ genres ɞ✦</h2>
                <div class="player-controls2">
                    <button class="play-btn">blues</button>
                    <button class="pause-btn">jazz</button>
                    <button class="next-btn">rock</button>
                    <button class="next-btn">pop</button>
                    <button class="play-btn">koplo</button>
                    <button class="pause-btn">gamelan</button>
                    <button class="next-btn">campursari</button>
                    <button class="next-btn">keroncong</button>
                    <button class="play-btn">k-pop</button>
                    <button class="pause-btn">hardrock</button>
                    <button class="next-btn">westside</button>
                    <button class="next-btn">dangdut</button>
                </div>
            </div>

            <div class="account-info">
                <h2>✦ʚ profile ɞ✦</h2>
                <img src="uploads/ningning.jpg" alt="Ningning" class="rounded-image">
                <div class="info-item">
                    <strong>name :</strong> daneeszh
                </div>
                <div class="info-item">
                    <strong>email :</strong> daneeszh@gmail.com
                </div>
                <div class="info-item">
                    <strong>membership :</strong> free
                </div>
            </div>

            <script>
            $(document).ready(function () {
                $('#openModal').on('click', function () {
                    $('#purchaseModal').fadeIn(300);
                });

                $('.close').on('click', function () {
                    $('#purchaseModal').fadeOut(300);
                });

                $(window).on('click', function (event) {
                    if ($(event.target).is('#purchaseModal')) {
                        $('#purchaseModal').fadeOut(300);
                    }
                });
                });
                function changeButtonText(button) {
                if (button.textContent === '||') {
                    button.textContent = '▷';
                } else {
                    button.textContent = '||';
                }
            }
        </script>
        </div>
</body>

</html>