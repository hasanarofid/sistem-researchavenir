import re

with open('app/website/index.html', 'r', encoding='utf-8') as f:
    content = f.read()

# Extract Navbar (<nav class="nav">...</nav>)
nav_m = re.search(r'<nav class="nav">.*?</nav>', content, re.DOTALL)
if nav_m:
    with open('resources/js/Components/Navbar.vue', 'w') as f:
        f.write(f'<template>\n{nav_m.group(0)}\n</template>\n\n<script setup>\nimport {{ Link }} from "@inertiajs/vue3";\n</script>')

# Extract Footer (<footer class="footer">...</footer>)
ft_m = re.search(r'<footer class="footer">.*?</footer>', content, re.DOTALL)
if ft_m:
    with open('resources/js/Components/Footer.vue', 'w') as f:
        f.write(f'<template>\n{ft_m.group(0)}\n</template>\n\n<script setup>\nimport {{ Link }} from "@inertiajs/vue3";\n</script>')

