<?php

require_once 'Parents/FamilyInterface.php';
require_once 'Parents/Family.php';
require_once 'Parents/MoreDetails.php';
require_once 'Parents/Member.php';
require_once 'Parents/Relative.php';
require_once 'Parents/Builder.php';
require_once 'Parents/MemberBuilder.php';
require_once 'Parents/RelativesBuilder.php';
require_once 'Parents/Home.php';

$home = new Home;
$home->addMember((new MemberBuilder())->make('Raman', 'male', 'Son'));
$home->addMember(MemberBuilder::make('Ram kirshna', 'male', 'Father'));
$home->addMember(MemberBuilder::make('Ram Pyari', 'female', 'Mother'));
$home->addMember((new MemberBuilder())->make('Ramita', 'female', 'Sister'));

$home->addRelative((new RelativesBuilder())->make('Laxmi', 'female', 'aunty'));
$home->addRelative(RelativesBuilder::make('Laxman', 'male', 'uncle'));
$home->addRelative(RelativesBuilder::make('Laxie', 'male', 'brother'));
$home->addRelative((new RelativesBuilder())->make('Laxila', 'female', 'sister'));

echo 'Total Family Members ' . count($home->getMembers());
echo '<br/>';
echo 'Total Relatives Member ' . count($home->getRelatives());


echo '<br/>';
echo '<br/>';
echo 'Family members';
foreach ($home->getMembers() as $member) {
    echo '<br/>';
    echo 'Name: ' . $member->getName();
    echo '<br/>';
    echo 'Gender: ' . $member->getGender();
    echo '<br/>';
    echo 'Relation: ' . $member->getRelation();
    echo '<br/>';
}

echo '<br/>';
echo '<br/>';
echo 'Family Relatives';
foreach ($home->getRelatives() as $relative) {
    echo '<br/>';
    echo 'Name: ' . $relative->getName();
    echo '<br/>';
    echo 'Gender: ' . $relative->getGender();
    echo '<br/>';
    echo 'Relation: ' . $relative->getRelation();
    echo '<br/>';
}

class Person
{

    public $name = 'sam';
    public $age = 12;
    private $sex = 'male';


    public function getName()
    {
        return $this->name;
    }

    /**
     * Things to do when user will do var_dump
     * @return array
     */
    public function __debugInfo()
    {
        return ['name' => $this->name];
    }

    /**State of object when it will be exported
     * @param $an_array
     * @return static
     */
    public static function __set_state($an_array)
    {
        $obj = new static;
        $obj->name = $an_array['name'];
        $obj->age = $an_array['age'];
        $obj->sex = $an_array['age'];
        return $obj;
    }

    /**When object is called as function
     *
     * @param string $x
     * @return string
     */
    public function __invoke($x = '')
    {
        return $x . 'Name is' . $this->name . ' age is ' . $this->age;
    }

    /**What to do when object sleeps?
     * We store its needed values and let
     * it sleep.
     *
     * @return array
     */
    public function __sleep()
    {
        return ['name', 'age', 'sex'];
    }

    /**
     * When wake up we want the stored values
     * that it kept when sleeping and start process again
     *
     */
    public function __wakeup()
    {
        $fopen = fopen('help.txt', 'w');
        fwrite($fopen, $this->name . $this->sex . $this->sex);
        fclose($fopen);
    }

    /**
     * What to do when non accessable props
     * value has been asked?
     *
     * @param $name
     * @return string
     */
    public function __get($name)
    {
        return 'hello u called non existed props';
    }

    /**What to do when non accessable props values
     * are set by user
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->{$name} = $value . 'setted';
    }

    /**
     * When someone checks the isset of props
     * @param $name
     */
    public function __isset($name)
    {
        $this->$name = true;
    }

    /**
     * When someone unset the props
     * @param $name
     */
    public function __unset($name)
    {
        unset($this->$name);
    }

    /**
     * When some one clones the object
     * we have also to clone the nested dependency
     *
     */
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**TO String
     * @return string
     */
    public function __toString()
    {
        return 'why u called me?';
    }
}

define('SEX', 'MALE');
$person = new Person;
echo $person;
echo $person(1);
echo '<br/>';
echo $person->address;
echo $person->sex;
$person->address = 'nepal';
echo '<br/>';
echo $person->address;

$person->name = 'samundra';
$person->age = 112;
$person->sex = SEX;
echo '<br/>';

$stored = serialize($person);
unserialize($stored);
echo var_dump($stored);

exit;
eval('$b = ' . var_export($person, true) . ';');
//$b = Person::__set_state([ 'name' => 'kira', 'age' => 1]);
$b->name = 'hari';
echo $b->sex;
echo $person->name;
