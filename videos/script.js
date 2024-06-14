/*
🎬 Video playlist UI Design like Skillshare With Vanilla JavaScript
👨🏻‍⚕️ By: Coding Design

You can do whatever you want with the code. However if you love my content, you can subscribed my YouTube Channel
🌎link: www.youtube.com/codingdesign
*/

const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Cyberpunk 2077',
        'name': 'Cyberpunk 2077.mp4',
        'duration': '1:40',
    },
    {
        'id': 'a2',
        'title': 'Ghostrunner 2',
        'name': 'Ghostrunner 2.mp4',
        'duration': '1:31',
    },
    {
        'id': 'a3',
        'title': 'Watch Dogs Legion',
        'name': 'Watch Dogs Legion.mp4',
        'duration': '1:13',
    },

    {
        'id': 'a4',
        'title': 'Stray',
        'name': 'Stray.mp4',
        'duration': '1:34',
    },
    {
        'id': 'a5',
        'title': 'Metro Exodus',
        'name': 'Metro Exodus.mp4',
        'duration': '1:42',
    },
    {
        'id': 'a6',
        'title': 'Wolfenstein',
        'name': 'Wolfenstein.mp4',
        'duration': '2:46',
    },
];

data.forEach((video, i) => {
    let video_element = `
                <div class="video" data-id="${video.id}">
                    <img src="images/play.svg" alt="">
                    <p>${i + 1 > 6 ? i + 1 : '0' + (i + 1)}. </p>
                    <h3 class="title">${video.title}</h3>
                    <p class="time">${video.duration}</p>
                </div>
    `;
    video_playlist.innerHTML += video_element;
})

let videos = document.querySelectorAll('.video');
videos[0].classList.add('active');
videos[0].querySelector('img').src = 'images/play.svg';

videos.forEach(selected_video => {
    selected_video.onclick = () => {

        for (all_videos of videos) {
            all_videos.classList.remove('active');
            all_videos.querySelector('img').src = 'images/play.svg';

        }

        selected_video.classList.add('active');
        selected_video.querySelector('img').src = 'images/pause.svg';

        let match_video = data.find(video => video.id == selected_video.dataset.id);
        main_video.src = 'videos/' + match_video.name;
        main_video_title.innerHTML = match_video.title;
    }
});
