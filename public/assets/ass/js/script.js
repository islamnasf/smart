$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        rtl:true,
        loop:true,
        items: 3,
        margin: 10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        dots: false,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
            }
        }
    })
});
// Sample data for items based on categories
const items = {
    ابتدائي: ['الصف الرابع', 'الصف الخامس'],
    متوسط: ['الصف السادس', 'الصف السابع', 'الصف الثامن', 'الصف التاسع'],
    ثانوي: ['الصف العاشر ', 'الصف الحادي عشر ', 'الصف الثاني عشر ']
};

// Function to update the items based on the selected category
function updateItems() {
    const categorySelect = document.getElementById('category');
    const itemSelect = document.getElementById('item');
    const selectedCategory = categorySelect.value;

    // Clear existing options
    itemSelect.innerHTML = '';

    // Add new options based on the selected category
    items[selectedCategory].forEach(item => {
        const option = document.createElement('option');
        option.value = item;
        option.text = item;
        itemSelect.add(option);
    });
}
// Attach the updateItems function to the change event of the category select
document.getElementById('category').addEventListener('change', updateItems);

// Initial call to populate the items based on the default selected category
updateItems();