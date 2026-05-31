$trending = Movie::withCount(['likes','reviews'])
    ->withAvg('reviews','rating')
    ->orderByDesc('likes_count')
    ->take(8)
    ->get();