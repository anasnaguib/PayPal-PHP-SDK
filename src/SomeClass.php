use Psr\Log\LoggerInterface;

class SomeClass {
    private $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function someMethod() {
        // ...existing code...
        $this->logger->info('Some log message');
        // ...existing code...
    }
}
