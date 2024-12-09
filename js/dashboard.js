$(document).ready(function() {
    const data = {
        users: 12,
        questions: 20,
        news: [
            { id: 1, title: "DELEGASI OKLAHOMA STATE UNIVERSITY BERKUNJUNG KE KAMPUS PNB", content: "Delegasi dari Oklahoma State University (OSU), Amerika Serikat, mengunjungi Politeknik Negeri Bali (PNB) pada hari Kamis, 27 Juni 2024, sebagai bagian dari rangkaian kunjungan resmi mereka ke Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi (Kemendikbudritek)", category: "akademik", image: "./img/EventKampus/berita3.jpg" },
            { id: 2, title: "Berita Non-Akademik 1", content: "Isi berita non-akademik 1", category: "nonakademik", image: "https://via.placeholder.com/300x200" },
            { id: 3, title: "Berita Olahraga 1", content: "Isi berita olahraga 1", category: "olahraga", image: "https://via.placeholder.com/300x200" }
        ],
        comments: [
            { id: 1, newsId: 1, user: "Revantha", comment: "Anjay Juara Satu, Keren buanggettt PNB !!!!", reply: "" },
            { id: 2, newsId: 2, user: "Syama", comment: "Kerennnn bingiiiitttt", reply: "" },
            { id: 3, newsId: 3, user: "Agus", comment: "Cris Starboy", reply: "" }
        ]
    };

    $('#userCount').text(data.users);
    $('#questionCount').text(data.questions);
    $('#newsCount').text(data.news.length);
    $('#commentCount').text(data.comments.length);

    data.news.forEach(news => {
        $('#editNewsSelect').append(`<option value="${news.id}">${news.title}</option>`);
        $('#commentNewsSelect').append(`<option value="${news.id}">${news.title}</option>`);
    });

    $('#newsTitle, #newsContent, input[name="newsCategory"], #newsImage').on('input change', function() {
        $('#previewTitle').text($('#newsTitle').val());
        $('#previewContent').text($('#newsContent').val());
        $('#previewCategory').text($('input[name="newsCategory"]:checked').val());
        const file = $('#newsImage').prop('files')[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#previewImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    $('#editNewsSelect').on('change', function() {
        const selectedNews = data.news.find(news => news.id == $(this).val());
        if (selectedNews) {
            $('#editNewsTitle').val(selectedNews.title);
            $('#editNewsContent').val(selectedNews.content);
            $(`input[name="editNewsCategory"][value="${selectedNews.category}"]`).prop('checked', true);
            $('#editPreviewImage').attr('src', selectedNews.image);
            $('#editPreviewTitle').text(selectedNews.title);
            $('#editPreviewContent').text(selectedNews.content);
            $('#editPreviewCategory').text(selectedNews.category);
        }
    });

    $('#editNewsTitle, #editNewsContent, input[name="editNewsCategory"], #editNewsImage').on('input change', function() {
        $('#editPreviewTitle').text($('#editNewsTitle').val());
        $('#editPreviewContent').text($('#editNewsContent').val());
        $('#editPreviewCategory').text($('input[name="editNewsCategory"]:checked').val());
        const file = $('#editNewsImage').prop('files')[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#editPreviewImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    $('#commentNewsSelect').on('change', function() {
        const selectedNewsId = $(this).val();
        const commentsForNews = data.comments.filter(comment => comment.newsId == selectedNewsId);
        $('#commentsList').empty();
        commentsForNews.forEach(comment => {
            $('#commentsList').append(`
                <div class="comment-item mb-3">
                    <strong>${comment.user}:</strong> ${comment.comment}
                    <div class="mt-2">
                        <textarea class="form-control reply-text" rows="2" placeholder="Tulis jawaban di sini"></textarea>
                        <button class="btn btn-primary btn-sm mt-2 reply-btn" data-comment-id="${comment.id}">Jawab</button>
                    </div>
                    <div class="reply-content mt-2 ${comment.reply ? '' : 'd-none'}">
                        <strong>Jawaban:</strong> <span class="reply-text">${comment.reply}</span>
                    </div>
                </div>
            `);
        });
    });

    $(document).on('click', '.reply-btn', function() {
        const commentId = $(this).data('comment-id');
        const replyText = $(this).siblings('.reply-text').val();
        const commentItem = $(this).closest('.comment-item');
        
        const comment = data.comments.find(c => c.id == commentId);
        if (comment) {
            comment.reply = replyText;
        }

        commentItem.find('.reply-content').removeClass('d-none');
        commentItem.find('.reply-content .reply-text').text(replyText);
        $(this).siblings('.reply-text').val('');
    });
});