document.addEventListener('alpine:init', () => {
    Alpine.data('products', () => ({
        items: [
            { id: 1, nama: 'master', img: '1.jpg', price: 20000 },
            { id: 2, nama: 'masters', img: '1.jpg', price: 24000 },
            { id: 3, nama: 'masterss', img: '1.jpg', price: 24400 },
            { id: 4, nama: 'mastersus', img: '1.jpg', price: 25000 },
            { id: 5, nama: 'mastersis', img: '1.jpg', price: 27000 }
        ],
        open: false,
        toggle() {
            this.open = !this.open;
        }
    }));
});
