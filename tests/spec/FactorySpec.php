<?php

namespace spec\SevenShores\Hubspot;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FactorySpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedThrough('make', ['demo']);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('SevenShores\Hubspot\HubSpotService');
    }

    public function it_throws_a_hubspot_exception_from_uninstantiable_api_class()
    {
        $this->shouldThrow('\SevenShores\Hubspot\Exceptions\HubSpotException')->during('api');
    }

    public function it_throws_a_reflection_exception_from_nonexistent_api_class()
    {
        $this->shouldThrow('\ReflectionException')->during('doesntExist');
    }

    public function it_creates_a_blogs_api_class()
    {
        $this->blogs()->shouldHaveType('SevenShores\Hubspot\Api\Blogs');
    }

    public function it_creates_a_blogAuthors_api_class()
    {
        $this->blogAuthors()->shouldHaveType('SevenShores\Hubspot\Api\BlogAuthors');
    }

    public function it_creates_a_blogPosts_api_class()
    {
        $this->blogPosts()->shouldHaveType('SevenShores\Hubspot\Api\BlogPosts');
    }

    public function it_creates_a_blogTopics_api_class()
    {
        $this->blogTopics()->shouldHaveType('SevenShores\Hubspot\Api\BlogTopics');
    }

    public function it_creates_a_contacts_api_class()
    {
        $this->contacts()->shouldHaveType('SevenShores\Hubspot\Api\Contacts');
    }

    public function it_creates_a_contactLists_api_class()
    {
        $this->contactLists()->shouldHaveType('SevenShores\Hubspot\Api\ContactLists');
    }

    public function it_creates_a_contactProperties_api_class()
    {
        $this->contactProperties()->shouldHaveType('SevenShores\Hubspot\Api\ContactProperties');
    }

    public function it_creates_a_email_api_class()
    {
        $this->email()->shouldHaveType('SevenShores\Hubspot\Api\Email');
    }

    public function it_creates_a_emailEvents_api_class()
    {
        $this->emailEvents()->shouldHaveType('SevenShores\Hubspot\Api\EmailEvents');
    }

    public function it_creates_a_files_api_class()
    {
        $this->files()->shouldHaveType('SevenShores\Hubspot\Api\Files');
    }

    public function it_creates_a_forms_api_class()
    {
        $this->forms()->shouldHaveType('SevenShores\Hubspot\Api\Forms');
    }

    public function it_creates_a_keywords_api_class()
    {
        $this->keywords()->shouldHaveType('SevenShores\Hubspot\Api\Keywords');
    }

    public function it_creates_a_marketPlace_api_class()
    {
        $this->marketPlace()->shouldHaveType('SevenShores\Hubspot\Api\MarketPlace');
    }

    public function it_creates_a_pages_api_class()
    {
        $this->pages()->shouldHaveType('SevenShores\Hubspot\Api\Pages');
    }

    public function it_creates_a_socialMedia_api_class()
    {
        $this->socialMedia()->shouldHaveType('SevenShores\Hubspot\Api\SocialMedia');
    }

    public function it_creates_a_workflows_api_class()
    {
        $this->workflows()->shouldHaveType('SevenShores\Hubspot\Api\Workflows');
    }

    public function it_creates_an_events_api_class()
    {
        $this->events()->shouldHaveType('SevenShores\Hubspot\Api\Events');
    }

    public function it_creates_a_company_properties_api_class()
    {
        $this->companyProperties()->shouldHaveType('SevenShores\Hubspot\Api\CompanyProperties');
    }
}
