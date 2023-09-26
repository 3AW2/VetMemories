export function openModal() {
    const modal = document.getElementById('myModal');
    modal.style.display = 'block';
}

export function closeModal(event) {
    const modal = document.getElementById('myModal');
    if (event.target === modal || event.target.classList.contains('close')) {
        modal.style.display = 'none';
    }
}
