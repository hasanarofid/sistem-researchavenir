import re

with open('downloaded_katalog.html', 'r', encoding='utf-8') as f:
    content = f.read()

start_idx = content.find('<div id="page-index"')
if start_idx != -1:
    open_divs = 0
    end_idx = -1
    i = start_idx
    while i < len(content):
        if content.startswith('<div', i):
            open_divs += 1
        elif content.startswith('</div', i):
            open_divs -= 1
            if open_divs == 0:
                end_idx = i + 6
                break
        i += 1
    
    if end_idx != -1:
        extracted = content[start_idx:end_idx]
        with open('extracted_katalog.html', 'w', encoding='utf-8') as f:
            f.write(extracted)
        print("Extracted #page-index successfully!")
else:
    print("Could not find #page-index in katalog")
