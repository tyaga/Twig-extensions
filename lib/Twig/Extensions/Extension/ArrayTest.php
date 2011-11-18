<?

class Twig_Extensions_Extension_ArrayTest extends Twig_Extension {
	public function getTests() {
        return array (
            'array' => new Twig_Test_Function('twig_test_is_array'),
        );
    }
	public function getName() {
		return 'ArrayTest';
	}
}

function twig_test_is_array($value) {
	return is_array($value);
}