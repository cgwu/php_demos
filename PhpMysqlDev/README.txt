@PHP.and.MySQL.Web.Development.4th.Edition-2009
P232

https://framework.zend.com/
https://github.com/zendframework

Zend Framework
Professional PHP packages ready for PHP 7
Focused on Simplicity, Reusability, and Performance
284,335,818 installs from Packagist!

Zend Framework (ZF) 是用 PHP 5.3及更高版本 来开发 web 程序和服务的开源框架。ZF 用 100% 面向对象编码实现。 ZF 的组件结构独一无二，每个组件几乎不依靠其他组件。这样的松耦合结构可以让开发者独立使用组件。 我们常称此为 “use-at-will”设计。 

Zend Framework经历了长达数年的开发，终于在2012年9月5日正式发布了Zend Framework 2，简称ZF2。时隔1.0版本的发布已经有5年之久。新的ZF2基本重写了整个底层代码，可以看作一个全新的框架，并且带来了很多新的特性。

模块化
（ModuleManager）
比起ZF1来说，ZF2原生支持模块的概念，任意第三方php程序，只要遵循Zend的编码规范和代码结构，都可以变成一个Zend模块。 [2] 
事件驱动
（EventManager）
传统程序中，代码都是按线性顺序执行的，所以开发中往往很难将一些功能独立为一个组件或模块。
事件驱动，或者也可以叫钩子（Hook），改变了普通框架MVC流程化的运行方式，应用了事件驱动之后，程序将呈现“注册事件” => “触发事件”的跳跃式运行，可以在不影响原有程序代码的，很容易的在任意位置加入新的业务逻辑，让项目的开发变得极为灵活。 [2] 
服务管理器
（ServiceManager）
服务管理器的概念来自于"服务定位模式（Service locator pattern）"的编程思想。这种思想提倡将程序中的每一个独立功能提取出来作为一个“服务”，每一个服务都是独立可唤醒的，只有服务被调用时，服务相关的程序才会启动。 [2] 
依赖注入
（Di Dependency Injection)
依赖注入广泛应用于Java的主流框架中，可以很好的解除大型应用中的耦合。ZF2引入Di也经过了反复的考量和权衡，即使进入beta阶段，Di仍然一度作为ZF2的基本实现方案，整个Mvc的配置基于Di。最终为了避免陷入Di可能造成的元数据式编程泥潭（Metaprogramming）,Di只是作为ZF2的底层实现，上层加入了ServiceManager。普通开发者在使用ZF2的过程中不需要接触到Di的层面。不过这并不妨碍DI作为一个优秀的php组件存在并发挥作用。 [2] 
社会化编程
ZF2的代码完全托管在Github，借助Github的优秀设计，任何人都可以轻松的通过fork参与ZF2的项目建设，甚至提交新的模块功能。

---
The complete list of superglobals is as follows:
 $GLOBALS—An array of all global variables (Like the global keyword, this allows
	you to access global variables inside a function—for example, as
	$GLOBALS[‘myvariable’].)
 $_SERVER—An array of server environment variables
 $_GET—An array of variables passed to the script via the GET method
 $_POST—An array of variables passed to the script via the POST method
 $_COOKIE—An array of cookie variables
 $_FILES—An array of variables related to file uploads
 $_ENV—An array of environment variables
 $_REQUEST—An array of all user input including the contents of input including
	$_GET, $_POST, and $_COOKIE (but not including $_FILES since PHP 4.3.0)
 $_SESSION—An array of session variables

---
Table 1.7 Operator Precedence in PHP 越下优先级越高
Associativity Operators
left ,
left or
left xor
left and
right print
left = += -= *= /= .= %= &= |= ^= ~= <<= >>=
left ? :
left ||
left &&
left |
left ^
left &
n/a == != === !==
n/a < <= > >=
left << >>
left + - .
left * / %
right ! ~ ++ -- (int) (double) (string) (array) (object) @
right []
n/a new
n/a ()


 is_array()—Checks whether the variable is an array.
 is_double(), is_float(), is_real() (All the same function)—Checks whether
the variable is a float.
 is_long(), is_int(), is_integer() (All the same function)—Checks whether
the variable is an integer.
 is_string()—Checks whether the variable is a string.
 is_bool()—Checks whether the variable is a boolean.
 is_object()—Checks whether the variable is an object.
 is_resource()—Checks whether the variable is a resource.
 is_null()—Checks whether the variable is null.
 is_scalar()—Checks whether the variable is a scalar, that is, an integer, boolean,
string, or float.
 is_numeric()—Checks whether the variable is any kind of number or a numeric
string.
 is_callable()—Checks whether the variable is the name of a valid function.

---Testing Variable Status
bool isset(mixed var);[;mixed var[,...]])
void unset(mixed var);[;mixed var[,...]])
bool empty(mixed var);

Reinterpreting Variables
int intval(mixed var[, int base]);
float floatval(mixed var);
string strval(mixed var);
