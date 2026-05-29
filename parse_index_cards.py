import re
import json

def extract_cards(filename):
    with open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    # In index.html, it might have a slightly different structure. Let's just find <div class="card"> up to the next </div> that isn't nested, or just use a generic regex for <h2>
    cards = re.findall(r'<div class="card".*?>(.*?)<div class="card-ft">', content, re.DOTALL)
    results = []
    
    for card in cards:
        title_m = re.search(r'<h2>(.*?)</h2>', card)
        subtitle_m = re.search(r'<p class="card-sub">(.*?)</p>', card)
        ticker_m = re.search(r'<span class="ticker".*?>(.*?)</span>', card)
        sector_m = re.search(r'<span class="sector".*?>(.*?)</span>', card)
        price_m = re.search(r'<div class="cmv.*?>(.*?)</div>', card)

        if not title_m:
            continue

        item = {
            'title': title_m.group(1).strip() if title_m else None,
            'description': subtitle_m.group(1).strip() if subtitle_m else None,
            'ticker': ticker_m.group(1).strip() if ticker_m else None,
            'sector': sector_m.group(1).strip() if sector_m else None,
            'price': price_m.group(1).strip() if price_m else None,
        }
        results.append(item)
    return results

print("Property Items from index.html:")
property_items = extract_cards('app/website/index.html')
print(json.dumps(property_items[:2], indent=2))
with open('database/seeders/property_data.json', 'w') as f:
    json.dump(property_items, f)
