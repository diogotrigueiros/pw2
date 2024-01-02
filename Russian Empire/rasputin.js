document.addEventListener('DOMContentLoaded', function() {
    var topics = document.querySelectorAll('.rasputinTopics');

    topics.forEach(function(topic, index) {
        setTimeout(function() {
            topic.classList.add('slide-in');
        }, index * 200);
    });

    var acc = document.querySelectorAll(".accordion");

    acc.forEach(function(item) {
        item.addEventListener("click", function() {
            this.classList.toggle("active");

            var section = this.closest('.rasputinTopics');
            var sectionElements = section.querySelectorAll(':not(h2)');

            sectionElements.forEach(function(element) {
                element.style.display = (element.style.display === "block") ? "none" : "block";
            });
        });
    });
});
