// script.js
document.addEventListener('DOMContentLoaded', () => {
    const reviewButton = document.getElementById('reviewButton');
    const closeReviewButton = document.getElementById('closeReviewButton');
    const reviewSection = document.getElementById('reviewSection');

    // Fungsi untuk menampilkan review
    const showReview = () => {
        reviewSection.classList.remove('hidden');
    };

    // Fungsi untuk menyembunyikan review
    const hideReview = () => {
        reviewSection.classList.add('hidden');
    };

    // Event listener untuk menampilkan review saat tombol diklik
    reviewButton.addEventListener('click', showReview);

    // Event listener untuk menyembunyikan review saat tombol diklik
    closeReviewButton.addEventListener('click', hideReview);
});
