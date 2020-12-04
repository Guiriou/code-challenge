<?php

namespace TBoileau\CodeChallenge\Domain\Security\Gateway;

use Ramsey\Uuid\UuidInterface;
use TBoileau\CodeChallenge\Domain\Security\Entity\Participant;

/**
 * Interface UserGateway
 *
 * @package TBoileau\CodeChallenge\Domain\Security\Gateway
 */
interface ParticipantGateway
{
    /**
     * @param string $email
     * @return Participant|null
     */
    public function getParticipantByEmail(string $email): ?Participant;

    /**
     * @param  string|null $email
     * @return bool
     */
    public function isEmailUnique(?string $email): bool;

    /**
     * @param  string|null $pseudo
     * @return bool
     */
    public function isPseudoUnique(?string $pseudo): bool;

    /**
     * @param Participant $user
     */
    public function register(Participant $user): void;

    /**
     * @param string $email
     * @param string $newPlainPassword
     * @return Participant
     */
    public function updatePassword(string $email, string $newPlainPassword): Participant;
}
