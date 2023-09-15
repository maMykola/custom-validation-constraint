<?php

namespace App\Command;

use App\Entity\AcmeEntity;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[AsCommand(
    name: 'app:validate-entity',
    description: 'Add a short description for your command',
)]
class ValidateEntityCommand extends Command
{
    public function __construct(private readonly ValidatorInterface $validator)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $entity = new AcmeEntity();

        $this->validator->validate($entity);

        return Command::SUCCESS;
    }
}
