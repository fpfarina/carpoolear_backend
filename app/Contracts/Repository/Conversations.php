<?php

namespace STS\Contracts\Repository;

use STS\User as UserModel;
use STS\Entities\Conversation;


interface Conversations {

    public function store (Conversation $conversation);

    public function delete (Conversation $conversation);

    public function getConversationsFromUser (UserModel $user);

    public function getConversationFromId ( $conversation_id, UserModel $user = null );

    public function getConversationByTripId ( $tripId, UserModel $user = null );

    public function users (Conversation $conversation);

    public function addUser (Conversation $conversation, UserModel $user);

    public function removeUser (Conversation $conversation, UserModel $user);

    public function matchUser(UserModel $user1, UserModel $user2);

}