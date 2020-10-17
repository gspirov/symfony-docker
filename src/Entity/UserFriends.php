<?php

namespace App\Entity;

use App\Repository\UserFriendsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserFriendsRepository::class)
 */
class UserFriends
{
    /**
     * @var User $user
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="userFriends")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @var User $friend
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $friend;

    /**
     * @ORM\ManyToOne(targetEntity=FriendshipStatus::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $status;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return UserFriends
     */
    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return User
     */
    public function getFriend(): User
    {
        return $this->friend;
    }

    /**
     * @param User $friend
     * @return UserFriends
     */
    public function setFriend(User $friend): self
    {
        $this->friend = $friend;
        return $this;
    }

    /**
     * @return FriendshipStatus
     */
    public function getStatus(): FriendshipStatus
    {
        return $this->status;
    }

    /**
     * @param FriendshipStatus $status
     * @return UserFriends
     */
    public function setStatus(FriendshipStatus $status): self
    {
        $this->status = $status;
        return $this;
    }
}
