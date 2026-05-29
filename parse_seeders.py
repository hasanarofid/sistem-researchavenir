import re
import json

def extract_cards(filename):
    with open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    # Extract all <div class="card"...> ... </div>
    cards = re.findall(r'<div class="card"([\s\S]*?)<div class="card-ft">([\s\S]*?)</div>\s*</div>', content)
    results = []
    
    for c1, c2 in cards:
        card = c1 + c2
        title_m = re.search(r'<h2>(.*?)</h2>', card)
        subtitle_m = re.search(r'<p class="card-sub">(.*?)</p>', card)
        ticker_m = re.search(r'<span class="ticker".*?>(.*?)</span>', card)
        sector_m = re.search(r'<span class="sector".*?>(.*?)</span>', card)
        cmv_m = re.findall(r'<div class="cmv.*?>(.*?)</div>', card)
        price_m = re.search(r'data-price="(.*?)"', card)
        tags_m = re.search(r'data-tags="(.*?)"', c1)
        date_m = re.search(r'data-date="(.*?)"', c1)

        if not title_m:
            continue

        item = {
            'title': title_m.group(1).strip() if title_m else None,
            'subtitle': subtitle_m.group(1).strip() if subtitle_m else None,
            'ticker': ticker_m.group(1).strip().replace('IDX: ', '') if ticker_m else None,
            'sector': sector_m.group(1).strip().replace('&#9935; ', '') if sector_m else None,
            'revenue': cmv_m[0].strip() if len(cmv_m) > 0 else None,
            'patmi': cmv_m[1].strip() if len(cmv_m) > 1 else None,
            'sales': cmv_m[2].strip() if len(cmv_m) > 2 else None,
            'price': price_m.group(1).strip() if price_m else None,
            'tags': tags_m.group(1).strip() if tags_m else None,
            'date': date_m.group(1).strip() if date_m else None,
        }
        results.append(item)
    return results

print("Research Items:")
research_items = extract_cards('app/website/katalog.html')
print(json.dumps(research_items[:5], indent=2))
with open('database/seeders/research_data.json', 'w') as f:
    json.dump(research_items, f)

print("Property Items:")
property_items = extract_cards('app/website/index.html')
print(json.dumps(property_items[:2], indent=2))
with open('database/seeders/property_data.json', 'w') as f:
    json.dump(property_items, f)
