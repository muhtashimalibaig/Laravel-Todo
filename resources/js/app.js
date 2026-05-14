import { createIcons, icons } from "lucide";

const renderLucideIcons = () => {
    createIcons({ icons });
};

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", renderLucideIcons);
} else {
    renderLucideIcons();
}
