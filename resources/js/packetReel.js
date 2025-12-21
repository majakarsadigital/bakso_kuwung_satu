export default function initPaketReel() {
    const container = document.getElementById("paket-reel");
    if (!container) return;

    const items = container.querySelectorAll(".reel-item");

    function updateActiveItem() {
        const containerRect = container.getBoundingClientRect();
        const containerCenter = containerRect.left + containerRect.width / 2;

        let closest = null;
        let closestDistance = Infinity;

        items.forEach(item => {
            const itemRect = item.getBoundingClientRect();
            const itemCenter = itemRect.left + itemRect.width / 2;

            const distance = Math.abs(containerCenter - itemCenter);

            if (distance < closestDistance) {
                closestDistance = distance;
                closest = item;
            }

            item.classList.remove("active");
        });

        if (closest) {
            closest.classList.add("active");

            const scrollOffset = container.scrollLeft + (closest.getBoundingClientRect().left + closest.offsetWidth / 2) - containerCenter;
            container.scrollTo({
                left: scrollOffset,
                behavior: "smooth"
            });
        }
    }

    container.addEventListener("scroll", () => requestAnimationFrame(updateActiveItem));
    updateActiveItem();
}
