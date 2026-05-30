import re

with open('downloaded_index.html', 'r', encoding='utf-8') as f:
    content = f.read()

# Let's extract everything inside the main body or <div class="page active" id="page-index"> if it exists.
# First let's check what IDs exist.
ids = re.findall(r'<div[^>]*id="([^"]+)"', content)
print("Found IDs:", list(set(ids))[:10])

# Let's see if there is a <nav> and extract it
nav_m = re.search(r'<nav[^>]*>(.*?)</nav>', content, re.DOTALL)
if nav_m:
    print("Found nav.")
    
# Let's just grep the "Riset Saham Kelas Institusi" to see where it is
match = re.search(r'(.{0,100}Riset Saham Kelas Institusi.{0,100})', content, re.DOTALL)
if match:
    print("Match around text:", match.group(1))

