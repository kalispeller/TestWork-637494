<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ChannelStoreRequest;
use App\Repositories\ChannelRepository;

class ChannelController extends BasicController
{
    protected function newRepository()
    {
        return new ChannelRepository();
    }

    public function store(ChannelStoreRequest $request)
    {
        $channel = $this->repository->save($request->validated());

        return response()->json($channel);
    }

    public function update(ChannelStoreRequest $request, int $id)
    {
        $channel = $this->repository->update($id, $request->validated());

        return response()->json($channel);
    }
}
